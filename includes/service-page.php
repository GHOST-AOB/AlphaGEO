<section class="page-hero service-page-hero">
    <div class="wrap">
        <div class="eyebrow light"><span></span> <a href="/?page=services">Our services</a> <i class="fa-solid fa-angle-right"></i> <?=h($detail['title'])?></div>
        <h1><?=h($detail['title'])?><br><em>Grounded in evidence.</em></h1>
        <p><?=h($detail['summary'])?></p>
    </div>
</section>
<section class="section">
    <div class="wrap service-page-layout">
        <div class="service-page-copy">
            <div class="eyebrow dark"><span></span> Service overview</div>
            <h2><?=h($detail['title'])?></h2>
            <p class="lead"><?=h($detail['overview'])?></p>
            <div class="service-outcome">
                <span><i class="fa-solid fa-bullseye"></i></span>
                <div><b>Project value</b><p><?=h($detail['outcome'])?></p></div>
            </div>
        </div>
        <aside class="capability-panel">
            <span class="eyebrow dark"><span></span> Scope & capabilities</span>
            <h3>How we can help</h3>
            <ul><?php foreach($detail['capabilities'] as $capability): ?><li><i class="fa-solid fa-check"></i><?=h($capability)?></li><?php endforeach ?></ul>
            <a class="button button-primary" href="/?page=contact&amp;service=<?=h($serviceSlug)?>">Enquire about this service <i class="fa-solid fa-arrow-right"></i></a>
        </aside>
    </div>
</section>
<section class="section section-soft related-services">
    <div class="wrap">
        <div class="section-heading">
            <div><div class="eyebrow dark"><span></span> Connected capabilities</div><h2>Services that work <em>together.</em></h2></div>
            <a class="text-link" href="/?page=services">View all services <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="related-grid">
            <?php foreach(array_slice($services,0,3) as $related): if($related['slug']===$serviceSlug) continue; ?>
            <a href="/services/<?=h($related['slug'])?>/"><span class="service-icon"><i class="fa-solid <?=h($related['icon'])?>"></i></span><b><?=h($related['title'])?></b><i class="fa-solid fa-arrow-right"></i></a>
            <?php endforeach ?>
        </div>
    </div>
</section>
