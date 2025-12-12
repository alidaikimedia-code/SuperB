<?php
?>
<footer class="footer">
    <div class="container">
        <!-- Top Brand Section -->
        <div class="footer-brand-top">
            <h3>Superb Party Girl</h3>
            <p><?= $texts['footer']['premium_escort_services'] ?></p>
        </div>

        <!-- Middle 3 Columns -->
        <div class="footer-content">
            <div class="footer-section">
                <h4><?= $texts['footer']['quick_links'] ?></h4>
                <ul>
                    <li><a href="<?= localizedPath('/') ?>"><?= $texts['footer']['home'] ?></a></li>
                    <li><a href="<?= localizedPath('/models') ?>"><?= $texts['footer']['all_models'] ?></a></li>
                    <li><a href="<?= localizedPath('/service') ?>"><?= $texts['footer']['services'] ?></a></li>
                    <li><a href="<?= localizedPath('/booking') ?>"><?= $texts['footer']['booking'] ?></a></li>
                    <li><a href="<?= localizedPath('/blogs') ?>"><?= $texts['header']['blog'] ?></a></li>
                    <li><a href="<?= localizedPath('/about') ?>"><?= $texts['footer']['about_us'] ?></a></li>
                    <li><a href="<?= localizedPath('/contact-us') ?>"><?= $texts['footer']['contact'] ?></a></li>
                    <li><a href="<?= localizedPath('/cities') ?>"><?= $texts['footer']['premium_escort_locations'] ?></a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4><?= $texts['footer']['model_categories'] ?></h4>
                <ul>
                    <li><a href="<?= localizedPath('/models/local-party-girl') ?>"><?= $texts['footer']['local_girls'] ?></a></li>
                    <li><a href="<?= localizedPath('/models/vietnam-party-girl') ?>"><?= $texts['footer']['vietnam_girls'] ?></a></li>
                    <li><a href="<?= localizedPath('/models/korea-party-girl') ?>"><?= $texts['footer']['korea_girls'] ?></a></li>
                    <li><a href="<?= localizedPath('/models/japan-party-girl') ?>"><?= $texts['footer']['japan_girls'] ?></a></li>
                    <li><a href="<?= localizedPath('/models/chinese-party-girl') ?>"><?= $texts['footer']['chinese_girls'] ?></a></li>
                    <li><a href="<?= localizedPath('/models/europe-party-girl') ?>"><?= $texts['footer']['europe_girls'] ?></a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4><?= $texts['footer']['contact_support'] ?></h4>
                <div class="contact-info">
                    <p><i class="fas fa-clock"></i> <?= $texts['footer']['available_24_7'] ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <?= $texts['footer']['malaysia_wide'] ?></p>
                    <div class="contact-buttons">
                        <a href="<?= env('TELEGRAM_CHANNEL') ?>" class="btn-telegram">
                            <i class="fab fa-telegram"></i> <?= $texts['footer']['telegram'] ?>
                        </a>
                        <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-booking">
                            <i class="fas fa-calendar"></i> <?= $texts['footer']['book_now'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <hr>
            <div class="footer-bottom-content">
                <p>&copy; <?= date('Y') ?> Superb Party Girl. <?= $texts['footer']['all_rights_reserved'] ?>.</p>
                <div class="footer-links">
                    <a href="<?= localizedPath('/privacy') ?>"><?= $texts['footer']['privacy_policy'] ?></a>
                    <a href="<?= localizedPath('/terms-of-service') ?>"><?= $texts['footer']['terms_of_service'] ?></a>
                    <a href="<?= localizedPath('/disclaimer') ?>"><?= $texts['footer']['disclaimer'] ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    color: #ffffff;
    padding: 60px 0 20px;
    /* margin-top: 80px; */
    text-align: center;
}

/* Top Brand Section */
.footer-brand-top h3 {
    color: #ff2491;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
}

.footer-brand-top p {
    color: #cccccc;
    margin-bottom: 40px;
    font-size: 16px;
}

/* Middle 3 Columns */
.footer-content {
    display: flex;
    justify-content: center;
    gap: 200px;
    margin-bottom: 40px;
    flex-wrap: wrap;
    text-align: left;
}

.footer-section h4 {
    color: #ffffff;
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 600;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #ff2491;
}

/* Contact Info */
.contact-info p {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    color: #cccccc;
}

.contact-info i {
    margin-right: 10px;
    color:rgb(255, 255, 255);
    width: 20px;
}

.contact-buttons {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 20px;
    align-items: center;
}

.btn-telegram, .btn-booking {
    display: inline-flex;
    align-items: center;
    padding: 12px 20px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    justify-content: center;
    width: 160px;
}

.btn-telegram {
    background: #0088cc;
    color: white;
}

.btn-telegram:hover {
    background: #006699;
    transform: translateY(-2px);
}

.btn-booking {
    background: #ff2491;
    color: white;
}

.btn-booking:hover {
    background: #e01e7a;
    transform: translateY(-2px);
}

.btn-telegram i, .btn-booking i {
    margin-right: 8px;
}

/* Bottom Section */
.footer-bottom {
    margin-top: 40px;
}

.footer-bottom hr {
    border: none;
    border-top: 1px solid #333;
    margin-bottom: 20px;
}

.footer-bottom-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.footer-bottom p {
    color: #999;
    margin: 0;
}

.footer-links {
    display: flex;
    gap: 20px;
}

.footer-links a {
    color: #999;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #ff2491;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        gap: 30px;
        text-align: center;
        align-items: center;
    }
    .footer-section {
        text-align: center;
        width: 100%;
        max-width: 300px;
    }
    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .contact-info p {
        justify-content: center;
        text-align: center;
        width: 100%;
    }
    .contact-buttons {
        flex-direction: column;
        align-items: center;
    }
    .btn-telegram, .btn-booking {
        width: 200px;
    }
}
</style>
