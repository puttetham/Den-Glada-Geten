<h2>Välkommen!</h2>
<form method="post">
    <input name="page" type="hidden" value="index">
    <textarea name="content" class="admin-textarea"><?php echo $text_array[0]; ?></textarea>
    <br>
    <input type="submit"></input>
</form>


<h2>Våra rum</h2>
<form method="post">
    <input name="page" type="hidden" value="vara_rum">
    <textarea  name="content" class="admin-textarea"><?php echo $text_array[1]; ?></textarea>
    <br>
    <input type="submit"></input>
</form>
