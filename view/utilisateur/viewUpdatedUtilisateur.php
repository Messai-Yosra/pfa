
<style>
    .parag{ 
        
        font-size : 20px ;
    }
    .backParag {
        margin-top : 30px; 
        background-color : #EFEFEF ;
        width : 50% ;
        padding-top : 20px ; 
        padding-bottom : 40px ; 
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        margin-bottom : 180px ;
    }
</style>
<center>
    <div class="backParag">
        <!-- <h3 style="margin-top : 60px ; color : green ;">
            Your informations has been updated successfully.
        </h3> -->

        <div class="alert alert-success" role="alert" style="margin-top : 60px ;">
		  You have updated your profile up successfully
		</div>

        <p class="parag">
        <?php
            $id = $u["id"]; 
            echo " Back to <a 
            href='index.php?controller=utilisateur&action=update&id=$id'> profile. </a>" ;
        ?>
        </p>
    </div>
</center>
