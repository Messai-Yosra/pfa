
<style>
    .parag{
        margin : 30px; 
        margin-bottom : 200px ;
        font-size : 20px ;
    }
    .backParag {
        background-color : #EFEFEF ;
        width : 50% ;
        padding-top : 50px ; 
        padding-bottom : 10px ; 
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>
<center>
    <div class="backParag">
        <h3 style="margin-top : 60px ; color : green ;">
            Your informations has been updated successfully.
        </h3>

        <p class="parag">
        <?php
            $id = $u["username"]; 
            echo " Back to <a 
            href='index.php?controller=utilisateur&action=update&id=$id'> profile. </a>" ;
        ?>
        </p>
    </div>
</center>
