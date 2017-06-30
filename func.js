function _choosemov()	//選擇電影:Group 2
{
	var _id=document.getElementById('mov').value
	location.replace('index.php?w=1&sid='+_id)
}
function _chooseshow(_id)	//選擇場次:Group 2
{
	var _time=document.getElementById('mov').value
	location.replace('index.php?w=3&sid='+_id+'&show='+_time)
}
function _chooseseat(_id,_show,_seat)	//選擇座位:Group 2
{
	location.replace('index.php?w=4&sid='+_id+'&show='+_show+'&seat='+_seat)
}
function _sear()	//查詢訂單:Group 3
{
	var ss=document.getElementById('_search').value
	location.replace('index.php?w=6&searchid='+ss)
}