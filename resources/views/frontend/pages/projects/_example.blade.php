{{--
    TEMPLATE for the documentation of a project, shown in its modal (fictional project "Orto Vivo").

    Title, photo, tags, authors, dates and the "Vai al progetto" button come from
    resources/data/projects.php: this file holds only the free-form content.

    To document a project:
    1. copy this file to _<slug>.blade.php (e.g. _piezopinza.blade.php)
    2. fill in the texts and replace the "#" links; remove the sections you don't need
    3. in resources/data/projects.php set 'details' => 'frontend.pages.projects._<slug>'
--}}

<p>
    Orto Vivo nasce dalla voglia di non ritrovare pi&ugrave; le piante di basilico secche dopo
    un weekend fuori casa. Alcuni sensori di umidit&agrave; piantati nei vasi comunicano con una
    scheda ESP32 che apre una piccola elettrovalvola solo quando la terra &egrave; davvero asciutta.
</p>

<!-- begin details -->
<h5 class="mt-4">Scheda progetto</h5>
<ul class="list-unstyled">
    <li><i class="fas fa-cubes fa-fw"></i> <b>Materiali:</b> compensato di pioppo 4mm, PETG, ESP32, sensori di umidit&agrave; capacitivi</li>
    <li><i class="fas fa-balance-scale fa-fw"></i> <b>Licenza:</b> CC BY-SA 4.0</li>
</ul>
<!-- end details -->

<!-- begin description -->
<h5 class="mt-4">Come funziona</h5>
<p>
    Ogni vaso ha il suo sensore: la scheda legge i valori ogni 15 minuti e, se l'umidit&agrave;
    scende sotto la soglia impostata, apre la valvola per pochi secondi. Il case &egrave; tagliato
    al laser e gli ugelli sono stampati in 3D, cos&igrave; chiunque pu&ograve; replicarlo al Fablab.
</p>
<p>
    Dal telefono si possono controllare lo stato dei vasi e lo storico delle innaffiature.
</p>
<!-- end description -->

<!-- begin links -->
<h5 class="mt-4">Risorse</h5>
<ul class="list-unstyled">
    <li><i class="fab fa-github fa-fw"></i> <a href="#" target="_blank">Codice sorgente</a></li>
    <li><i class="fas fa-file-alt fa-fw"></i> <a href="#" target="_blank">Documentazione e file di taglio</a></li>
    <li><i class="fab fa-youtube fa-fw"></i> <a href="#" target="_blank">Video del progetto</a></li>
</ul>
<!-- end links -->
