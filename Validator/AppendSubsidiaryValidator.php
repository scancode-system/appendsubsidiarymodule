<?php

namespace Modules\AppendSubsidiary\Validator; 


class AppendSubsidiaryValidator
{

	public function rule($data){
		return [
			'subsidiary_id' =>  'integer|min:1',
			'subsidiary_name' =>  'string|max:255'
		];
	}

	public function filterRules($data)
	{

	}

}
