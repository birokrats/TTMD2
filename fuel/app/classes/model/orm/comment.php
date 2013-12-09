<?php
/**
 * Description of comment
 *
 * @author Karlis
 */
class Model_Orm_Comment extends Orm\Model {
    //put your code here
    protected static $_table_name = 'comments';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
        'id',
        'comment',
        'event_id',
        'user_id',
        'created'     
    );
    
    
}
