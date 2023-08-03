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
                array('page' => 'all', 'name' => 'SEXY SHOWER SLUT', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bca2ba2b01891000e055188a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MILF TAKES DEEP MEAT', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b33cfb6b01891000a4ee7a5e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MASSAGE TURNS TO FUCKING', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7f6afdb01891000167811ba00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SKYLAR\'S SUPER SUCK', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b770b8d1018910004fc9849a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'POOLSIDE PLEASURES', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7fc0f6801891000eda9c4bf00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MS MYNX MOANS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b78257bd018910007abcea7200000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'FRIENDLY FINGERS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b30f6ea001891000b582143900000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'LOVELIEST LESBOS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b32acf1f018910002e3f98c800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'BIG TITS TAKES IT DEEP', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2ccf70901891000594d464a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'PINK HAIR PLOW DOWN', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bbae66ff01891000e97343b300000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'NASTY MILF LIKES IT ROUGH', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3453fa80189100083703db300000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'EVIE\'S EXPERT HEAD', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7898e8c01891000eed9061400000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SkYLAR SHOWS IT ALL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b787d6c801891000ba3a2cfd00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MONICA MAKES ME CUM', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b78b79db0189100024814ba900000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MADISON\'S MEGA MASTURBATION', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b791e58901891000baf480e800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'VICTORIA\'S VICIOUS VACUUM', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7934b6901891000a1f62d0d00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'LESBIAN PILLOWFIGHT LICKING', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b31f028a01891000ba5773fa00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MELODY MOUTHS MY COCK', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7a1026401891000eec0f0e000000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'BEACH AMATEUR BONED', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2bcc3ae018910007fa5233800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'BIRTHDAY POKING', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2b81f9b018910000608083b00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'LESBIAN LOVERS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2a35fa301891000fe4bb00c00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'STEP DAUGHTER AND FRIEND FUN', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2b2956001891000ab72056000000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
            )
        );

        $videoList['TeenFlix'] = array(
            'image_directory' => 'TeenFlix/tf',
            'videos' => array(
                array('page' => 'all', 'name' => 'PIERCED AND SHAVED AMATEUR', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3497dd601891000e8eb9c1a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'TEEN LOVES TO RIDE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcca5edb01891000a013dd4a00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MADISON\'S MESSY FACIAL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7beb15501891000ba5a760600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'BARELY LEGAL BELLA BARES ALL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7b9b44d01891000c3013d9000000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'PLAYTIME TEEN LOVE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bc4ccc6201891000505189da00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'TEEN RIDES HER MASSEUSE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcd069af0189100069f7e92f00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'KARLEE CRAVES PENETRATION', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7c4b01e018910002381bd4e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'CHERI CUMS HARD', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7c06e260189100086c50a1f00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'COLLEGE CUTIE GETS CREAMED', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2ddc85301891000bdd943f800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'EVIE ENJOYS INSERTION', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7ce8b9a01891000e6cae7ea00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MARGO MOANS IN MISSIONARY', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7d2a8d001891000de16976e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'LESBIAN TEEN LOVE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b32360a101891000bc1cd95800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'HUNGOVER TEEN GETS DICK', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b31aa5d0018910007fae139e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'PINK HAIR PINK PUSSY', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b34e7ade01891000d7616e1600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'BAMBI LOVES TO BONE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7d71a9701891000b512275300000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'BEAN LICKING TEENS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2c8d8f8018910007b773de500000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SAGE\'S SLOPPY SEX', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7dd451601891000cd5b08f800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'TEENIE TAKES IT', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcc3bb5a0189100065192ad700000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'VALENTINA GETS VIOLATED', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7e21b1e01891000992ee76c00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'NOVA GETS NAILED', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7e7f2fe01891000bc81cf2e00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SLUT NEEDS A STUDY BUDDY', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcb26d8e01891000e03a2f4f00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'TASTY TEEN TOURIST', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcbdca6b01891000d48cea7000000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'BREAK DANCING PUSSY LICKING', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2af6556018910001660bb0100000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'YOGA TEEN GETS FUCKED', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2a9a0670189100069b36dca00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),

            )
        );

        $videoList['GroupFlix'] = array(
            'image_directory' => 'GroupFlix/gf',
            'videos' => array(
                array('page' => 'all', 'name' => 'CLASSY FUCKERS 3 SOME', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2d26a150189100031791f3f00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SEXY MILFIE 3 SOME SEX', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcf42d4f0189100088c658f700000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'DOUBLE COCK MILF DESTRUCTION', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2f2fd8901891000ba9bcfb400000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => '2 TEENS SHARE COCK', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2959b0201891000dc0275c700000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'LUST PARTY OF 3', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b32fef4e01891000d1a8140100000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => '3 SOME 6 HOLES FILLED', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b29d19b601891000b1cf228000000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'DOUBLE BLOWJOB BEAUTIES', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bc356ba301891000f6f67d8700000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SQUIRTING 3 SOME', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcb88f2d01891000b74222b500000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'COUPLE SWAP 4 SOME', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2e2c5770189100080edcf8800000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'DOUBLE BLOWJOB SANDWICH', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2ec569a0189100094c747b100000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'VICTORIA AND SHEA SHARE', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7ea680801891000be32997900000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'DOUBLE BLOWING DIVAS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2e7af3d018910000cd885a600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'member', 'name' => 'BBC ADVENTURES', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b197db4901891000fc53d5b600000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
            )
        );

        $videoList['AnalFlix'] = array(
            'image_directory' => 'AnalFlix/af',
            'videos' => array(
                array('page' => 'all', 'name' => 'MILF LOVES ANAL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b3378f9801891000d225baa300000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'ANAL CREAMERY', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b2c3c878018910004bb4e04700000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'MONICA\'S ANAL ASSAULT', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7ed17e8018910000544300200000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'DOWN AND DIRTY ASS TO MOUTH', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b307a30101891000a8aa2e6200000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'ANASTASIA DOES ANAL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7eeb1c50189100016c3a24b00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'RAW RAILING', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bc5793b001891000a49fc7e000000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'SKINNY SOLO ANAL BALLS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bcad4de501891000a223a39200000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'VOLUPTUOUS BLONDE TAKES CONTROL', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=bceced1001891000c97628ef00000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
                array('page' => 'all', 'name' => 'ANASTASIA FUCKS HER ASS', 'video_url' => 'https://cloudv.cdnetworks.com/player/auto-play.action?videoId=b7f39af401891000ebefd71200000000&userId=A059B4798FBBB37FCA24595540D5673DF7E95F00D50FFE91&playerType=11&language=2'),
            )
        );

        return $videoList;
    }
}
