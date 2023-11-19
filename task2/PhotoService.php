<?php
declare(strict_types = 1);
require_once ('PhotoSizes.php');
require_once('Photo.php');

class PhotoService

{
    use PhotoSizes;

    public function calculateServicePrice(Photo $photo, int $count) :float
    {
        $price = $this->getPriceForSize($photo->getSize());

        if ($photo->getIsColor()) {
            $price = $price * 1.5;
        }

        return $price * $count;
    }

    private function getPriceForSize(string $size) :int
    {
        switch ($size)
        {
            case self::SIZE_2:
                return 200;
            case self::SIZE_3:
                return 300;
            case self::SIZE_4:
                return 400;
            case self::SIZE_5:
                return 500;
            case self::SIZE_6:
                return 600;
            case self::SIZE_7:
                return 700;
            case self::SIZE_8:
                return 800;
            default:
                return 100;
        }
    }
}