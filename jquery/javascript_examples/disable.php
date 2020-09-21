
<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByTagName('input');
  if(checkboxes.type='Checkbox')
  {
	  
  
  for(var i=1, n=checkboxes.length;i<n;i++)
  
  {
   // document.write(y[i]);
	
	checkboxes[i].disabled = rue;
  }t
	}
}
</script>


<br>
<br>
<input type="checkbox" onClick="toggle(this)" /> Toggle All<br/>
<?php for($i=1; $i<=4; $i++)
{?>
<input type="checkbox" id="foo" name="foo[<?php echo $i; ?>]" value="bar1"> Bar 1

<br/>
<?php } ?>