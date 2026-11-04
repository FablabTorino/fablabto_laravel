<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Http::fake([
            'api.brevo.com/*' => Http::response(['campaigns' => [['htmlContent' => '<p>Latest newsletter</p>']]]),
        ]);
    }

    public static function pages(): array
    {
        return array_map(fn ($uri) => [$uri], [
            '/', '/index.html', '/history', '/faq', '/association', '/pricing', '/donation', '/giftcard',
            '/projects', '/openday', '/helloworld', '/machines', '/communities', '/newsletter', '/signup',
            '/3dprint/centauricarbon/1', '/3dprint/centauricarbon/2', '/3dprint/ender3v2neo', '/3dprint/mars',
            '/3dprint/kossel', '/laser/matilda', '/laser/eureka', '/cnc/fresone', '/cnc/roland', '/vinyl/camm',
        ]);
    }

    #[DataProvider('pages')]
    public function test_page_renders(string $uri): void
    {
        $this->get($uri)
            ->assertOk()
            ->assertSee('js-cookie-consent', false);
    }

    public static function redirects(): array
    {
        return [
            ['/pay', 'https://anp.winddoc.com/short/2xs/'],
            ['/renew', 'https://anp.winddoc.com/short/49h/'],
            ['/affiliated', 'https://anp.winddoc.com/short/4bx/'],
            ['/booking', 'https://bit.ly/formprenotazione_fabto'],
        ];
    }

    #[DataProvider('redirects')]
    public function test_redirect(string $uri, string $target): void
    {
        $this->get($uri)->assertRedirect($target);
    }

    public function test_unknown_machine_is_404(): void
    {
        $this->get('/3dprint/centauricarbon/3')->assertNotFound();
    }

    public function test_newsletter_shows_latest_campaign(): void
    {
        $this->get('/newsletter')->assertSee('<p>Latest newsletter</p>', false);
    }

    public function test_newsletter_survives_brevo_failure(): void
    {
        Http::fake(['api.brevo.com/*' => Http::response(['message' => 'Key not found'], 401)]);

        $this->get('/newsletter')->assertOk();
    }

    public function test_cookie_banner_is_italian(): void
    {
        $this->get('/')->assertSee('Questo sito web utilizza cookie tecnici', false);
    }

    public function test_errors_do_not_leak_debug_details_in_production(): void
    {
        config(['app.debug' => false]);

        $this->post('/')
            ->assertStatus(405)
            ->assertDontSee('APP_KEY')
            ->assertDontSee('Stack trace');
    }
}
