<?php 
		$event_list	= array (
//		array(code,desc line 1,desc line 2,desc line 3,special,original,available,capacity),
	
		array('101','21/09/2019 (星期六) 10:00 - 10:30','','',500,600,2,2),
		array('102','21/09/2019 (星期六) 10:30 - 11:00','','',500,600,2,2),
		array('103','21/09/2019 (星期六) 11:00 - 11:30','','',500,600,2,2),
		array('104','21/09/2019 (星期六) 11:30 - 12:00','','',500,600,2,2),
		array('105','21/09/2019 (星期六) 12:00 - 12:30','','',500,600,2,2),
		array('106','21/09/2019 (星期六) 14:00 - 14:30','','',500,600,2,2),
		array('107','21/09/2019 (星期六) 14:30 - 15:00','','',500,600,2,2),
		array('108','21/09/2019 (星期六) 15:00 - 15:30','','',500,600,2,2),
		array('109','21/09/2019 (星期六) 15:30 - 16:00','','',500,600,2,2),
		array('110','21/09/2019 (星期六) 16:30 - 17:00','','',500,600,2,2),
		array('111','21/09/2019 (星期六) 17:00 - 17:30','','',500,600,2,2),
		array('112','21/09/2019 (星期六) 17:30 - 18:00','','',500,600,2,2),
		array('113','21/09/2019 (星期六) 18:00 - 18:30','','',500,600,2,2),
		array('201','22/09/2019 (星期日) 10:00 - 10:30','','',500,600,2,2),
		array('202','22/09/2019 (星期日) 10:30 - 11:00','','',500,600,2,2),
		array('203','22/09/2019 (星期日) 11:00 - 11:30','','',500,600,2,2),
		array('204','22/09/2019 (星期日) 11:30 - 12:00','','',500,600,2,2),
		array('205','22/09/2019 (星期日) 12:00 - 12:30','','',500,600,2,2),
		array('206','22/09/2019 (星期日) 14:00 - 14:30','','',500,600,2,2),
		array('207','22/09/2019 (星期日) 14:30 - 15:00','','',500,600,2,2),
		array('208','22/09/2019 (星期日) 15:00 - 15:30','','',500,600,2,2),
		array('209','22/09/2019 (星期日) 15:30 - 16:00','','',500,600,2,2),
		array('210','22/09/2019 (星期日) 16:30 - 17:00','','',500,600,2,2),
		array('211','22/09/2019 (星期日) 17:00 - 17:30','','',500,600,2,2),
		array('212','22/09/2019 (星期日) 17:30 - 18:00','','',500,600,0,2),
		array('213','22/09/2019 (星期日) 18:00 - 18:30','','',500,600,0,2),
	);
		$arrlength = count($event_list);
		$collength = count($event_list[0]);

		$myJSON = json_encode($event_list);
		echo $myJSON;

 ?>