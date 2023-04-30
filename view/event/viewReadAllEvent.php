
<style> 
.buttonTable { /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    border-radius : 8px ; 
}

.buttonTable:hover{
    color : red ;
}

</style>

<center class="table-responsive">
    <a href="<?php echo 'index.php?controller=event&action=create'; ?>" class="buttonTable" style="left : 60% !important; margin-top : 40px ;
    margin-bottom : 30px; margin-left : 50%;
    background-color: #6488FF; ">
        Add Event
    </a>
    <table class="table" style="width : 60% ; margin-bottom : 150px  " >
    <thead>
        <tr>
        <th style="width : 60%">Title</th>
        <th style="width : 20%">Start Date</th>
        <th scope="col" style="width : 20%">Action</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tab_u as $u){ 
            if ($u["name_user"] == $_SESSION["user"]["username"]) {
            $id = $u["id"] ;    
        ?>
        
        <tr>
        <th scope="row"> 
            <img style="width : 40px" src="<?php echo $u["image"] ;  ?>" />    
            
            <?php echo $u["title"]  ; ?></th>
        <th scope="row"> <?php echo $u["start_date"]  ; ?></th>

        <td>
            <a href="<?php echo 'index.php?controller=event&action=update&id='.$id; ?>" class="buttonTable" style="background-color : green ;">Edit</a>
            <a href="<?php echo 'index.php?controller=event&action=delete&id='.$id; ?>" class="buttonTable" style="background-color : red ;">Delete</a>

        </td> 
        </tr>
        <?php 
            }
        } ?>
    </tbody>
    </table> 
</center>




<!-- <div class= 'add'>
	<a href='index.php?controller=utilisateur&action=create'>Add Category</a>
</div> -->
