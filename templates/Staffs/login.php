<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                <div class="login-title">Sunday Everyday Management System</div>
               <!-- <img class="login_image" src="../webroot/img/sundayEveryday_logo_small.png" width="100" height="100"/> -->
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <?= $this->Flash->render() ?>
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <?= $this->Form->create() ?>
                            <p class="text-white-50 mb-5">Please enter your username and password:</p>

                            <div class="form-outline form-white mb-4">
                                <?= $this->Form->control('username', ['required' => true]) ?>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <?= $this->Form->control('password', ['required' => true]) ?>
                            </div>
                            <?= $this->Form->submit(__('Login'),['class' => 'btn btn-outline-light btn-lg px-5']); ?>
                            <?= $this->Html->link("Back to Home Page", ['controller'=>'Guests','action' => 'index'], ['class' => 'btn btn-outline-info btn-lg px-5']) ?>
                            <?= $this->Form->end() ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
