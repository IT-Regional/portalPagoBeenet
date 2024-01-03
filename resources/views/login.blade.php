
    @include('styles')
<!-- ======== Preloader =========== -->
    <!-- ======== Preloader =========== -->
    <div class="overlay"></div>
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== section start ========== -->
      <section class="signin-section">
        <div class="container-fluid" id="login">
          <!-- ========== title-wrapper start ========== -->
          <br>
          <!-- ========== title-wrapper end ========== -->
          <div class="row g-0 auth-row">
            <div class="col-lg-6" style="background-color: #FFFFFF ;">
              <div class="auth-cover-wrapper">
                <div class="auth-cover">
                  <div class="cover-image">
                    <img src="{{ asset('images/Beenet-logo.png') }}" alt="Eco Logo">
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signin-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Inicio de Sesion</h6>
                  <form action="#">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Correo</label>
                          <input type="email" placeholder="Correo" />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Contraseña</label>
                          <input type="password" placeholder="********" />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="button-group d-flex justify-content-center flex-wrap">
                          <button class="main-btn primary-btn btn-hover w-100 text-center" style="background-color: #ff6900">
                            Entrar
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                    Designed and Developed by
                    Click Networks
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- ========== footer end =========== -->
    </main>