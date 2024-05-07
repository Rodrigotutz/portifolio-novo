<?php $this->layout('components/theme', [$contact]) ?>




<section class="container mt-5">
    <div style="min-height: 100vh;"  class="row justify-content-center align-items-center">
        <div class="col-12 col-md-7 d-flex justify-content-center">
            <form class="form-outline" style="width: 30rem;" action="<?= $router->route("resource.mail") ?>" method="POST">
                <h2 class="mb-2 text-center">Envie um e-mail!</h2>
                <p class="mb-3 text-center small">Caso queria entrar em contato comigo basta preencher o formulário abaixo e me enviar uma mensagem</p>
                
                <div class="form-floating form-sm mb-4">
                    <input type="text" name="name" id="name" placeholder="Insira seu nome" class="form-control"/>
                    <label  class="text-muted" for="name">Insira seu nome</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="email" id="email" name="email" placeholder="Insira seu e-mail" class="form-control" />
                    <label  class="text-muted" for="email">Insira seu e-mail</label>
                </div>

                
                <div class="form-floating mb-4">
                    <input type="text" id="subject" name="subject" placeholder="Assunto" class="form-control" />
                    <label  class="text-muted" for="subject">Assunto</label>
                </div>

                <div class="mb-4">
                    <textarea placeholder="Insira sua mensagem" class="form-control" name="message" id="message" rows="4"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" id="send" class="btn btn-outline-light mb-4"><i class="bi bi-send-fill"></i> Enviar mensagem</button>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-5 d-flex justify-content-center">
            <div>
                <h4>Me encontre nas redes sociais</h4>
                <div class="d-flex gap-3 fs-3 justify-content-center">
                    <a class="linkedin" href="https://linkedin.com/in/rodrigotutz/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a class="text-white" href="https://github.com/rodrigotutz" target="_blank"><i class="bi bi-github"></i></a>
                    <a class="whatsapp" href="https://wa.me/5517981337392?text=Ol%C3%A1+Rodrigo+Tutz" target="_blank"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>




<script>
    var send = document.querySelector("#send")
    var containerLoading = document.querySelector("#containerLoading")

    send.addEventListener("click", () => {
        containerLoading.classList.remove("d-none")
        containerLoading.classList.add("d-flex")
    })
</script>