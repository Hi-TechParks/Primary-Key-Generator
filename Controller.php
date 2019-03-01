<?php 


		// Primary Key Generator
        $primary_key = DB::table('padu_slide_image')
                    ->select('padu_slide_image.SLIDE_IMAGE_ID')
                    ->max('SLIDE_IMAGE_ID');

        if (isset($primary_key)) {
            $slide_id = $primary_key + '1';
        }
        else {
            $slide_id = '20190001';
        }
		
		
		// Insert Into DB
		$insert = DB::table('padu_slide_image')
            ->insert([
                'SLIDE_IMAGE_ID' => $slide_id,
            ]);


?>