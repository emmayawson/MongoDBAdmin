<select name="collections_list" class="span12">
    <option value="-1">Select collection</option>
    <option value="db1">DB Name</option>
    <option value="db2">DB Name</option>
    <option value="db3">DB Name</option>
    <option value="db4">DB Name</option>
    <option value="db5">DB Name</option>
</select>
<div class="well sidebar-nav">
<ul class="nav nav-list">
    <li class="nav-header">DB List</li>
    <?php if(isset($this->no_db_list) && $this->no_db_list):?>
    <li><a href="javascript:void()">Select DB</a></li>
    <?php else:?>
    <li><a href="#">Collection Name</a></li>
    <li><a href="#">Collection Name</a></li>
    <li><a href="#">Collection Name</a></li>
    <li><a href="#">Collection Name</a></li>
    <?php endif;?>
</ul>
</div><!--/.well -->
        