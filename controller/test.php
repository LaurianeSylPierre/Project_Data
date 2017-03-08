
        <script type="text/javascript">
        function get_poll(){
            $("ul").html("");
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "act=getq",
                dataType: "json",
                success: function(response){
                    var ans1, ans = "";
                    if($(".poll")).html().length)
                    $(".poll").css("display, none");
                    if(response.id){
                        ans+='<li class="list-group-item"><div class="radio"><label><input class="rad" type="radio" name="poll_options" id="'+i+'" value="'+i+'"><label for="'+i+'">'+val+'</label></label></div></li>';

                    });
                    $('.poll').html("");
                    $(".question").html(response.question);
                    $("ul").append(ans);
                }else{}

                }
            });
        }
        </script>
