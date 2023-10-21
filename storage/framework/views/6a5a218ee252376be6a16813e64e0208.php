<?php $__env->startSection('content'); ?>

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Cadastrar Categoria</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <h6 class="mb-25 fs-4" >Digite o nome da categoria de curso</h6>
                  <form action="<?php echo e(route('cadastro-aula')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-style-1 fs-4 ">
                      <label class="fs-4">Código do Curso</label>
                      <input name='idcurso' type="number" />

                      <label class="fs-4">Título da Aula</label>
                      <input name='tituloaula' type="text" />

                      <label class="fs-4">URL da Aula</label>
                      <input name='urlaula' type="text" />
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                  </form>
                  </div>
                </div>

              </div>
              <!-- Invoice Wrapper End -->
            </div>
            <!-- end container -->
          </div>
          <!-- end container -->
        </div>
        <!-- end container -->
      </div>
      <!-- end container -->
    </div>
    <!-- end container -->
  </div>
  <!-- end container -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alunos\Desktop\app\appCurso\resources\views/cad_aula.blade.php ENDPATH**/ ?>