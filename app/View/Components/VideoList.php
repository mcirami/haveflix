<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoList extends Component
{


    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $videoList = $this->getVideosArray();

        return view('components.video-list')->with(['videoList' => $videoList]);
    }

    private function getVideosArray() {

        $videoList = array();

        $videoList['FeaturedFlix'] = array(
            'image_directory' => 'FeaturedFlix/ff',
            'videos' => array(
                array('name' => 'SEXY SHOWER SLUT', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b34e7ade01891000d7616e1600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'MILF TAKES DEEP MEAT', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b33cfb6b01891000a4ee7a5e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'MASSAGE TURNS TO FUCKING', 'video_url' => 'https://video-testing-bucket.s3.us-east-2.amazonaws.com/Phonic+Pressure+-+Breathe+(clip).mp4'),
                array('name' => 'SKYLAR\'S SUPER SUCK', 'video_url' => ''),
                array('name' => 'POOLSIDE PLEASURES', 'video_url' => ''),
                array('name' => 'MS MYNX MOANS', 'video_url' => ''),
                array('name' => 'FRIENDLY FINGERS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b30f6ea001891000b582143900000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'LOVELIEST LESBOS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b32acf1f018910002e3f98c800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'BIG TITS TAKES IT DEEP', 'video_url' => ''),
                array('name' => 'PINK HAIR PLOW DOWN', 'video_url' => ''),
                array('name' => 'NASTY MILF LIKES IT ROUGH', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3453fa80189100083703db300000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'EVIE\'S EXPERT HEAD', 'video_url' => ''),
                array('name' => 'KYLAR SHOWS IT ALL', 'video_url' => ''),
                array('name' => 'MONICA MAKES ME CUM', 'video_url' => ''),
                array('name' => 'MADISON\'S MEGA MASTURBATION', 'video_url' => ''),
                array('name' => 'VICTORIA\'S VICIOUS VACCUM', 'video_url' => ''),
                array('name' => 'LESBIAN PILLOWFIGHT LICKING', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b31f028a01891000ba5773fa00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'MELODY MOUTHS MY COCK', 'video_url' => ''),
            )
        );

        $videoList['TeenFlix'] = array(
            'image_directory' => 'TeenFlix/tf',
            'videos' => array(
                array('name' => 'PIERCED AND SHAVED AMATEUR', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3497dd601891000e8eb9c1a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'TEEN LOVES TO RIDE', 'video_url' => 'https://video-testing-bucket.s3.us-east-2.amazonaws.com/Phonic+Pressure+-+Breathe+(clip).mp4'),
                array('name' => 'MADISON\'S MESSY FACIAL', 'video_url' => ''),
                array('name' => 'BARELY LEGAL BELLA BARES ALL', 'video_url' => ''),
                array('name' => 'PLAYTIME TEEN LOVE', 'video_url' => ''),
                array('name' => 'TEEN RIDES HER MASSEUSE', 'video_url' => ''),
                array('name' => 'KARLEE CRAVES PENETRATION', 'video_url' => ''),
                array('name' => 'CHERI CUMS HARD', 'video_url' => ''),
                array('name' => 'COLLEGE CUTIE GETS CREAMED', 'video_url' => ''),
                array('name' => 'EVIE ENJOYS INSERTION', 'video_url' => ''),
                array('name' => 'MARGO MOANS IN MISSIONARY', 'video_url' => ''),
                array('name' => 'LESBIAN TEEN LOVE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b32360a101891000bc1cd95800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'HUNGOVER TEEN GETS DICK', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b31aa5d0018910007fae139e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'PINK HAIR PINK PUSSY', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b34e7ade01891000d7616e1600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'BAMBI LOVES TO BONE', 'video_url' => ''),
                array('name' => 'BEAN LICKING TEENS', 'video_url' => ''),
                array('name' => 'SAGE\'S SLOPPY SEX', 'video_url' => ''),
                array('name' => 'TEENIE TAKES IT', 'video_url' => ''),
                array('name' => 'VALENTINA GETS VIOLATED', 'video_url' => ''),
                array('name' => 'NOVA GETS NAILED', 'video_url' => ''),
                array('name' => 'SLUT NEEDS A STUDY BUDDY', 'video_url' => ''),
                array('name' => 'TASTY TEEN TOURIST', 'video_url' => ''),
            )
        );

        $videoList['GroupFlix'] = array(
            'image_directory' => 'GroupFlix/gf',
            'videos' => array(
                array('name' => 'CLASSY FUCKERS 3 SOME', 'video_url' => 'https://video-testing-bucket.s3.us-east-2.amazonaws.com/Phonic+Pressure+-+Breathe+(clip).mp4'),
                array('name' => 'SEXY MILFIE 3 SOME SEX', 'video_url' => 'https://video-testing-bucket.s3.us-east-2.amazonaws.com/Phonic+Pressure+-+Breathe+(clip).mp4'),
                array('name' => 'DOUBLE COCK MILF DESTRUCTION', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2f2fd8901891000ba9bcfb400000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => '2 TEENS SHARE COCK', 'video_url' => ''),
                array('name' => 'LUST PARTY OF 3', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b32fef4e01891000d1a8140100000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => '3 SOME 6 HOLES FILLED', 'video_url' => ''),
                array('name' => 'DOUBLE BLOWJOB BEAUTIES', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2e7af3d018910000cd885a600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'SQUIRTING 3 SOME', 'video_url' => ''),
                array('name' => 'COUPLE SWAP 4 SOME', 'video_url' => ''),
                array('name' => 'DOUBLE BLOWJOB SANDWICH', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2ec569a0189100094c747b100000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'VICTORIA AND SHEA SHARE', 'video_url' => ''),
                array('name' => 'DOUBLE BLOWING DIVAS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3021900018910005c69987a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
            )
        );

        $videoList['AnalFlix'] = array(
            'image_directory' => 'AnalFlix/af',
            'videos' => array(
                array('name' => 'MILF LOVES ANAL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3378f9801891000d225baa300000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'ANAL CREAMERY', 'video_url' => 'https://video-testing-bucket.s3.us-east-2.amazonaws.com/Phonic+Pressure+-+Breathe+(clip).mp4'),
                array('name' => 'MONICA\'S ANAL ASSULT', 'video_url' => ''),
                array('name' => 'DOWN AND DIRTY ASS TO MOUTH', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b307a30101891000a8aa2e6200000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('name' => 'ANASTASIA DOES ANAL', 'video_url' => ''),
                array('name' => 'RAW RAILING', 'video_url' => ''),
                array('name' => 'SKINNY SOLO ANAL BALLS', 'video_url' => ''),
                array('name' => 'VOLUPTUOUS BLONDE TAKES CONTROL', 'video_url' => ''),
                array('name' => 'ANASTASIA FUCKS HER ASS', 'video_url' => ''),
            )
        );

        return $videoList;
    }
}
