<?php

namespace Modules\AppendSubsidiary\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
			'subsidiary_id' =>  'integer|min:1',
			'subsidiary_name' =>  'string|max:255'
		];
	}

	public function modifiers()
	{
		return [];
	}


	public function columnsFormat()
	{
		return  [];
	}

}
