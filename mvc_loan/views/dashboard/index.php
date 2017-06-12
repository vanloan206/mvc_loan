<div class="container">
    <h2>Create category</h2>
    <form id="randomInsert" action="<?php echo URL ?>/dashboard/xhrInsert" method="post" class="form-horizontal" >
        <div class="form-group">
            <label class="control-label col-sm-2">Category:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter name" name="text" required>
            </div>
        </div>
        
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

<hr />
<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Function</th>
          </tr>
        </thead>
        <tbody id="listInserts" class="del">
          
        </tbody>
    </table>
</div>
