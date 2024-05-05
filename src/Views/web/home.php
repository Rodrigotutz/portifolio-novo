<?php $this->layout('components/theme', [$home, $sidebar]) ?>

<section class="bg-white text-dark"  style="margin-bottom: -20rem; height: 130vh;">
    <div class="row justify-content-center align-items-center" style="min-height: 75vh;">
        <div class="col-md-6 col-sm-12 text-center">
            <h1 class="display-2 fw-bold">Olá!</h1>
            <h1 class="display-4 fw-bold">Eu sou o Tutz!</h1>
            <div class="animate-txt">
                <span class="fw-bold fs-6 text-dark"></span>
            </div> 
            <a href="https://api.whatsapp.com/send/?phone=5517981337392&text=Ol%C3%A1+Rodrigo+Tutz&type=phone_number&app_absent=0" class="btn btn-dark mt-3 fw-bold" target="_blank" ><i class="bi bi-whatsapp"></i> Whatsapp</a>
        </div>
        <div class="col-md-6 d-none d-md-block mt-2 text-center">
            <img src="<?= asset('img/tutz-anime.svg') ?>" class="w-100" style="border-radius: 50%;" alt="Rodrigo">
        </div>
    </div>
    <div class="text-center">
        <span>Deslize para ver mais!</span> <br>
        <span><i class="bi bi-arrow-down-circle-fill"></i></span>
    </div>
</section>

<div class="divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path class="wave-1" fill="#273036" fill-opacity="1" d="M0,224L30,208C60,192,120,160,180,165.3C240,171,300,213,360,224C420,235,480,213,540,176C600,139,660,85,720,85.3C780,85,840,139,900,170.7C960,203,1020,213,1080,224C1140,235,1200,245,1260,224C1320,203,1380,149,1410,122.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave-2" fill="#273036" fill-opacity="0.75" d="M0,224L30,192C60,160,120,96,180,64C240,32,300,32,360,58.7C420,85,480,139,540,154.7C600,171,660,149,720,133.3C780,117,840,107,900,112C960,117,1020,139,1080,154.7C1140,171,1200,181,1260,197.3C1320,213,1380,235,1410,245.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave-3" fill="#273036" fill-opacity="0.50" d="M0,160L30,144C60,128,120,96,180,117.3C240,139,300,213,360,208C420,203,480,117,540,122.7C600,128,660,224,720,261.3C780,299,840,277,900,272C960,267,1020,277,1080,250.7C1140,224,1200,160,1260,154.7C1320,149,1380,203,1410,229.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
</div>

<section class="about">
    <div class="skills pb-5">
        <div class="container pt-5">
            <h2 class="text-center text-white mb-5">Habilidades do Tutz:</h2>
            <div class="row">
                <div class="col-md-3 mt-2">
                    <div class="card card-div shadow" style="height: 400px;">
                        <div class="card-body text-center">
                            <img src="<?= asset('img/palet.png') ?>" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Designer">
                            <h3 class="card-title">Designer</h3>
                            <h6 class="card-subtitle mt-3">Desenho toda as estrutura do seu site, interações e padrões de projeto</h6> <br>
                            <span class="fw-bold">Ferramentas</span>
                            <p class="mt-1">Adobe XD, Photoshop, Illustrator </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-2">
                    <div class="card card-div shadow" style="height: 400px;">
                        <div class="card-body text-center">
                            <img src="<?= asset('img/gears.png') ?>" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="SEO">
                            <h3 class="card-title">SEO</h3>
                            <h6 class="card-subtitle mt-3">Otimização para os motores de busca, anúncios e geração de leads</h6> <br>
                            <span class="fw-bold">Ferramentas</span>
                            <p class="mt-1">Google Ads, Facebook Ads, SEO Optimization </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-2">
                    <div class="card card-div card-item-2 shadow" style="height: 400px;">
                        <div class="card-body text-center">
                            <img src="<?= asset('img/frontend.png') ?>" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Frontend">
                            <h3 class="card-title">Frontend</h3>
                            <h6 class="card-subtitle mt-3">Desenvolvimento da parte visual e as interações do seu site</h6> <br>
                            <span class="fw-bold mt-3">Linguagens</span>
                            <p class="mt-1">SASS, Javascript, Typescript</p>
                            <span class="fw-bold">Frameworks</span>
                            <p class="mt-1"> Vue.js, React.js, Bootstrap, Tailwind</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-2">
                    <div class="card card-div card-item-3 shadow" style="height: 400px;">
                        <div class="card-body text-center">
                            <img src="<?= asset('img/backend.png') ?>" style="width: 50px;" class="img-fluid mb-2 mt-3" alt="Backend">
                            <h3 class="card-title">Backend</h3>
                            <h6 class="card-subtitle mt-3">Desenvolvimento da parte funcional e de segurança do site com a estrutura MVC</h6> <br>
                            <span class="fw-bold">Linguagens</span>
                            <p class="mt-1">PHP, MySql</p>
                            <span class="fw-bold">Frameworks</span>
                            <p class="mt-1">Laravel, Slim</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div class="mt-5 text-white text-center pb-4 small" style="opacity: 0.3;">
        <small style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#sidebar">Cliqui aqui ou acesse o menu de navegação lateral para ver mais</small>
    </div>
</section>
