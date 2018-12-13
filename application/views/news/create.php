<br><br>
<div class="col-lg-9">
    <?php echo validation_errors(); ?>
    
    <?php echo form_open('news/create'); ?>

    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="title" placeholder="Enter news title">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="text" id="" cols="30" rows="10" placeholder="Enter the news text content" ></textarea>
        </div>

        <div class="col-md-12 text-right">
            <button type="submit" value="submit" class="btn submit_btn">Create news item</button>
        </div>
        </form>
    </div>
</div>