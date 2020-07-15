<?php require __DIR__ .'/connect.php';
$pagename='adinsert';
?>
<?php include __DIR__.'/header.php' ?>
<?php include __DIR__.'/nav.php' ?>

<div class="card" style="width: 18rem;">
<form action="" name="form1" method="post" onsubmit="return formCheck()">
    <div class="formgroup">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name">
    <small id="nameHelp" class="form-text"></small>
    </div>
    <div class="formgroup">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" name="email">
    <small id="emailHelp" class="form-text"></small>
    </div><div class="formgroup">
    <label for="cellphone">cellphone</label>
    <input type="text" class="form-control" id="mobile" name="mobile">
    <small id="mobileHelp" class="form-text"></small>
    </div><div class="formgroup">
    <label for="birthday">birthday</label>
    <input type="text" class="form-control" id="birthday" name="birthday">
    <small id="birthdayHelp" class="form-text"></small>
    </div><div class="formgroup">
    <label for="address">address</label>
    <input type="text" class="form-control" id="address" name="address"
    cols="30" rows="3">
    <small id="addressHelp" class="form-text"></small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php include __DIR__.'/scripts.php' ?>
<script>
    function formCheck(){
        $.post('api.php',$(document.form1).serialize(),function (data){
            console.log(data);
        });
            
        return false;
}
</script>
<?php include __DIR__.'/foot.php' ?>