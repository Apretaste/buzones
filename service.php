<?php

class Buzones extends Service
{
	/**
	 * Function executed once the service is called
	 * 
	 * @param Request
	 * @return Response
	 * */
	public function _main(Request $request)
	{
		$connection = new Connection();
		$query = "SELECT email FROM jumper WHERE status = 'SendReceive' OR status = 'ReceiveOnly'";
		$result = $connection->deepQuery($query);

		$response = new Response();
		$content = array("emails" => $result);
		$response->createFromTemplate("basic.tpl", $content);
		return $response;
	}
}
