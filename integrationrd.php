<?php
	require_once('modules/Vtiger/models/Contact.php');
	
	$inputfile = file_get_contents("php://input");
	$data = json_decode($inputfile);
	$size = count($data->leads);
	
	error_log("Lead RD Station:::: ".print_r($data->leads,1));
	for($i=0; $i < $size; $i++){		
		
		$id = $data->leads[$i]->id;
		$email = $data->leads[$i]->email;
		$name = $data->leads[$i]->name;
		$company = $data->leads[$i]->company;
		$job_title = $data->leads[$i]->job_title;
		$bio = $data->leads[$i]->bio;
		$public_url = $data->leads[$i]->public_url;
		$created_at = $data->leads[$i]->created_at;
		$opportunity = $data->leads[$i]->opportunity;
		$number_conversions = $data->leads[$i]->number_conversions;
		$user = $data->leads[$i]->user;
		
		$first_conversion = $data->leads[$i]->first_conversion;
		$content = $first_conversion->content;
		$identificador = $content->identificador;
		
		$vtrftk = "sid:819ce9fbbc8faa432b84061a2db6c61b7ec3befd,1495117803";
		$publicid = "53509481ed5b8e6a0cd8fc03fd853241";
		$namewf = "RD Station (cadastro de leads) - CAS CORPORATIVO";
		
		switch($identificador){
			case "gestao-de-frota":
				$cas = "CAS CORPORATIVO";
				break;			
			case "quatenus_machine":
				$cas = "CAS CORPORATIVO";
				break;
			case "fms-dimep":
				$cas = "CAS DIMEP";
				break;
			default;
				$cas = "CAS VAREJO";
				$vtrftk = "sid:22ee8875d490ac672dd3122f4f325afc0837b481,1493940003";
				$publicid = "28e6943f63abace1275dec99470c44e6";
				$namewf = "RD Station (cadastro de leads)";
				break;
		}
				//--$traffic_source = $content->traffic_source;
				//--$created_at = $content->created_at;
				//--$email_lead = $content->email_lead;
		
			//-$created_at = $first_conversion->created_at;
			//-$cumulative_sum = $first_conversion->cumulative_sum;
			//-$source = $first_conversion->source;
			$conversion_origin = $first_conversion->conversion_origin;
			$channel = $conversion_origin->channel;
			//error_log($channel);
				//--$medium = $conversion_origin->medium;
				//--$value = $conversion_origin->value;
				//--$campaign = $conversion_origin->campaign;
				//--$channel = $conversion_origin->channel;
			$last_conversion = $data->leads[$i]->last_conversion;
			//-$content = $last_conversion->content;
				//--$identificador = $content->identificador;
				//--$traffic_source = $content->traffic_source;
				//--$created_at = $content->created_at;
				//--$email_lead = $content->email_lead;
		
			//-$created_at = $last_conversion->created_at;
			//-$cumulative_sum = $last_conversion->cumulative_sum;
			//-$source = $last_conversion->source;
			//-$conversion_origin = $last_conversion->conversion_origin;
				//--$source = $conversion_origin->source;
				//--$medium = $conversion_origin->medium;
				//--$value = $conversion_origin->value;
				//--$campaign = $conversion_origin->campaign;
				//--$channel = $conversion_origin->channel;
				//Tudo deve cair no VTiger como 'Não Qualificado'
		$custom_fields = $data->leads[$i]->custom_fields;
		$website = $data->leads[$i]->website;
		$personal_phone = $data->leads[$i]->personal_phone;
		$mobile_phone = $data->leads[$i]->mobile_phone;
		$city = $data->leads[$i]->city;
		$state = $data->leads[$i]->state;
		$tags = $data->leads[$i]->tags;
		$lead_stage = $data->leads[$i]->lead_stage;
		$last_marked_opportunity_date = $data->leads[$i]->last_marked_opportunity_date;
		$fit_score = $data->leads[$i]->fit_score;
		$interest = $data->leads[$i]->interest;

		//error_log("1");		
		//error_log("email:: ".$email);		
		$existsContact = Contact_Model::getInstance()->existsContact($email);
		//error_log("2");		
		//error_log("existsContact:: ".$existsContact);		
		
		//error_log("Nome: {$name}");
		//error_log("Email: {$email}");
		//error_log("mobile_phone: {$mobile_phone}");
		
		if($existsContact == 0){

			ini_set('display_errors',1);
			ini_set('display_startup_erros',1);
			error_reporting(E_ALL);

		  $post = [
			  '__vtrftk' => $vtrftk,
			  'publicid' => $publicid,
			  'name' => $namewf,
			  'VTIGER_RECAPTCHA_PUBLIC_KEY' => 'RECAPTCHA PUBLIC KEY FOR THIS DOMAIN',
			  'firstname' => $name,
			  'label:Classificação' => 'Lead',
			  'label:Entidade_Gestora' => $cas,
			  'label:Necessidade' => 'Não definido',
			  'leadsource' => $identificador,
			  'label:Como_ficou_sabendo_da_Quatenus?' => 'Não definido',
			  'email' => $email,
			  'mobile' => $mobile_phone,
			  'label:Status_do_Contato' => 'Não Qualificado',
			  'label:Identificador_RD_Station' => $id,
			  'label:Telefone_Fixo' => $personal_phone,
			  'label:Origem' => $channel
		  ];
		  if($post) {
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, 'http://crm.quatenusonline.com.br/crm/modules/Webforms/capture.php');
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($ch);
				//error_log("response:: ".print_r($response, 1));
				curl_close($ch);
		  }
		} 

		//error_log("Passou código");	
		//error_log("-----------------");
		//error_log("Nome: {$name}");
		//error_log("Email: {$email}");
		//error_log("mobile_phone: {$mobile_phone}");
	}
?>
