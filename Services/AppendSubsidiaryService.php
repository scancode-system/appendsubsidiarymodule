<?php

namespace Modules\AppendSubsidiary\Services;


class AppendSubsidiaryService {
	
	public function fields(){
		return config('appendsubsidiary.fields');
	}

	public function sample(){
		return config('appendsubsidiary.sample');
	}

}
