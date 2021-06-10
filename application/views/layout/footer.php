 <!-- start site-footer -->
 <footer class="site-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-sm-6">
                        <div class="widget about-widget">
                            <div class="footer-logo"><img src="assets/images/footer-logo.png" alt></div>
                                <p>Desde 2014, Lobato Engenharia. Fiscalização de obras, etc etc.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-sm-6">
                        <div class="widget services-widget">
                            <h3>Serviços</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Fiscalização de obras</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Fiscalização de obras</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Metal Engineering</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Petroleo e Gas</a></li>
                                </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-sm-12">
                        <div class="widget services-widget">
                            <h3>Contato</h3>
                                <ul>
                                    <li><a href="#"> 8598860-1287</a></li>
                                    <li><a href="#"> lobatoengenharia@outlook.com</a></li>
                                    <li><a href="#"> Endereço</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end upper-footer -->
            <div class="copyright-info">
                <div class="container">
                    <p><a href="<?php echo base_url('/') ?>" target="_blank">Lobato Engenharia</a> &copy; 2021  Todos os direitos reservados</p>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->

    <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js"')?>"></script>

    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- Plugins for this template -->
    <script src="<?php echo base_url('assets/js/jquery-plugin-collection.js') ?>"></script>

    <!-- Google map api -->
    <script src="<?php echo base_url('https://maps.googleapis.com/maps/api/js?key') ?>"></script>

    <!-- Custom script for this template -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>


    <script>
        $(document).ready(function(){

        $('#contact_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
        url:"<?php echo base_url(); ?>home/validation",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
            $('#contact').attr('disabled', 'disabled');
        },
        success:function(data)
        {
            if(data.error)
            {
            if(data.name_error != '')
            {
            $('#name_error').html(data.name_error);
            }
            else
            {
            $('#name_error').html('');
            }
            if(data.email_error != '')
            {
            $('#email_error').html(data.email_error);
            }
            else
            {
            $('#email_error').html('');
            }
            if(data.subject_error != '')
            {
            $('#subject_error').html(data.subject_error);
            }
            else
            {
            $('#subject_error').html('');
            }
            if(data.message_error != '')
            {
            $('#message_error').html(data.message_error);
            }
            else
            {
            $('#message_error').html('');
            }
            }
            if(data.success)
            {
            $('#success_message').html(data.success);
            $('#name_error').html('');
            $('#email_error').html('');
            $('#subject_error').html('');
            $('#message_error').html('');
            $('#contact_form')[0].reset();
            }
            $('#contact').attr('disabled', false);
        }
        })
        });

        });
    </script>



</body>

</html>