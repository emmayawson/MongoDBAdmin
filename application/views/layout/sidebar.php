
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">DB List</li>
              <?php if(isset($this->no_db_list) && $this->no_db_list):?>
                <li><a href="javascript:void()">Select a DB</a></li>
              <?php else:?>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
              <?php endif;?>
            </ul>
          </div><!--/.well -->
        