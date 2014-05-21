
<?php if( $this->items !=null ) : ?>
<div class="panel-group" id="accordion-<?php echo $this->id?>">
    <div class="panel panel-default">
      <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $this->id?>">
                <?php echo $this->titulo; ?>
              </a>
            </h4>
      </div>
      
      <div id="<?php echo $this->id?>" class="panel-collapse collapse in">
          <div class="panel-body">
                <div class="table-responsive" >
                  <table class="table table-hover" id="table-<?php echo $this->id?>">
                    <?php foreach($this->items as $item ): ?>
                    <?php if( (strlen( $item )>1)  ) : ?>
                      <tr>  <td> <?php echo $item ; ?> </td> </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  </table>
                </div>
          </div>
      </div>
    </div>


</div>
<?php endif; ?>