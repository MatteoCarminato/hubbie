    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <script src="{{asset('admin/js/deznav-init.js')}}"></script>
    <!-- Apex Chart -->
    <script src="{{asset('admin/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {


            // Inseri máscara no CEP
            $("#cep").inputmask({
                mask: ["99999-999", ],
                keepStatic: true
            });

            // Método para consultar o CEP
            $('#cep').on('blur', function() {

                if ($.trim($("#cep").val()) != "") {

                    $("#mensagem").html('(Aguarde, consultando CEP ...)');
                    $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=" + $("#cep").val(), function() {

                        if (resultadoCEP["resultado"]) {
                            $("#rua").val(unescape(resultadoCEP["tipo_logradouro"]) + " " + unescape(resultadoCEP["logradouro"]));
                            $("#bairro").val(unescape(resultadoCEP["bairro"]));
                            $("#cidade").val(unescape(resultadoCEP["cidade"]));
                            $("#uf").val(unescape(resultadoCEP["uf"]));
                        }

                        $("#mensagem").html('');
                    });
                }
            });
        });
    </script> -->

    <script>
        $(document).ready(function() {
            $("#cnpj").mask("99.999.999/9999-99");

            // Adicionamos o evento onclick ao botão com o ID "pesquisar"
            $('#cnpj').on('change', function(e) {

                // Aqui recuperamos o cnpj preenchido do campo e usamos uma expressão regular para limpar da string tudo aquilo que for diferente de números
                var cnpj = $('#cnpj').val().replace(/[^0-9]/g, '');

                // Fazemos uma verificação simples do cnpj confirmando se ele tem 14 caracteres
                if (cnpj.length == 14) {

                    // Aqui rodamos o ajax para a url da API concatenando o número do CNPJ na url
                    $.ajax({
                        url: 'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
                        method: 'GET',
                        dataType: 'jsonp', // Em requisições AJAX para outro domínio é necessário usar o formato "jsonp" que é o único aceito pelos navegadores por questão de segurança
                        complete: function(xhr) {

                            // Aqui recuperamos o json retornado
                            response = xhr.responseJSON;

                            // Na documentação desta API tem esse campo status que retorna "OK" caso a consulta tenha sido efetuada com sucesso
                            if (response.status == 'OK') {

                                // Agora preenchemos os campos com os valores retornados
                                $('#razao_social').val(response.nome);
                                $('#nome_fantasia').val(response.fantasia);
                                $('#uf').val(response.uf);
                                $('#bairro').val(response.bairro);
                                $('#rua').val(response.logradouro);
                                $('#numero').val(response.numero);
                                $('#cep').val(response.cep);
                                $('#cidade').val(response.municipio);
                                $('#fantasia').val(response.nome_fantasia);
                                $('#tipo').val(response.tipo);
                                $('#complemento').val(response.complemento);
                                $('#email').val(response.email);

                                // Aqui exibimos uma mensagem caso tenha ocorrido algum erro
                            } else {
                                alert(response.message); // Neste caso estamos imprimindo a mensagem que a própria API retorna
                            }
                        }
                    });

                    // Tratativa para caso o CNPJ não tenha 14 caracteres
                } else {
                    alert('CNPJ inválido');
                }
            });
        });
    </script>


    </body>

    </html>