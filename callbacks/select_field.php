<?

$options = array();
if(is_array($data['item_array']))
{
  foreach($data['item_array'] as $k=>$option)
  {
    if(is_object($option))
    {
      $options[] = $option;
      continue;
    }
    if(is_numeric($k)) $k=$option;
    $options[] = (object)array('id'=>$k, 'name'=>$option);
  }
} else {
  $options = $$data['item_array'];
}

$options = array_merge( array( (object)array($data['value_field']=>'',$data['display_field']=>"-- Choose --" ) ), $options);