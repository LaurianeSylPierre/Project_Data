<div class="container">
    <div class="row">
        <div class="col s5">
            <div class="row valign-wrapper brown lighten-2 z-depth-2 cadre">
                <form name="formulaire" method="post" action="" class="col offset-s2 s8">
                    <input name="name" type="text" class="validate" placeholder="Full name">
                    <div class="input-field col s12">
                        <select name="sex" id="">
                            <option value="" disabled selected>Gender</option>
                            <option value="">Woman</option>
                            <option value="">Man</option>
                            <option value="">Other</option>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select name="age" id="">
                            <option value="" disabled selected>Age</option>
                            <option value="">13 to 17</option>
                            <option value="">18 to 24</option>
                            <option value="">25 to 34</option>
                            <option value="">35 to 44</option>
                            <option value="">45 to 54</option>
                            <option value="">55 to 65</option>
                            <option value="">Older</option>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select name="" id="">
                            <option value="" disabled selected>Ethnicity</option>
                            <option value="">Caucasian</option>
                            <option value="">Latinx</option>
                            <option value="">East Asian</option>
                            <option value="">Etc</option>
                        </select>
                    </div>
                    <button type="submit" class="col offset-s2 s8 btn waves-effect waves-light brown lighten-3">Your death !</button>
                </form>
            </div>
        </div>
        <div class="col offset-s2 s5">
            <div id="cadre" class="row valign-wrapper brown lighten-2 z-depth-2 cadre">
                wesh
            </div>
        </div>
    </div>
</div>
</main>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="view/materialize/js/materialize.min.js"></script>
<script>

//empêcher le changement de page

$(document).ready(function(){

$("form[name='formulaire']").submit(function(e) {
var formData = new FormData($(this)[0]);

        $.ajax({
        url: "controller/your_death.php",
        type: "POST",
        data: formData,
        async: false,
        success: function (msg) {
        $("#cadre").html(msg);
        },
        cache: false,
        contentType: false,
        processData: false
        });

e.preventDefault();
});
});

//Materialize stuff
$(document).ready(function() {
$('select').material_select();
});
</script>
