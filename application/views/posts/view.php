<?php
//custom function
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
   }
   pre_r($post);
   pre_r($comments);
   pre_r($title);

?>

<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on:<?php echo $post['created_at']; ?></small><br>
<img  src="<?php echo site_url(); ?>assets/images/posts/<?php 
             echo $post['post_image']  ?>" style="width:50%; height:400px;">
<div class="post-body"> 
     <?php echo $post['body']; ?>
</div> 

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
    <hr>
    <a class="btn btn-default float-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    <hr>
<?php endif; ?>


<h3>Comments</h3>
<?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
        <div class="card card-body">
               <h5><?php echo $comment['body']; ?>
               [by <strong><?php echo $comment['name']; ?></strong>]</h5>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No Comments To Display</p>
<?php endif; ?>
<hr>


<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
    <div class="form-group">
         <label>Name</label>
         <input type="text" name="name" class="form-controle">
    </div>
    <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" class="form-controle">
    </div>
    <div class="form-group">
         <label>Body</label>
         <textarea type="text" name="body" class="form-controle"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <button class="btn btn-primary" type="submit">Submit</button>
</form>