<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftController extends Controller
{
    //user
    public function user(User $user)
    {
        return view('shifts/user')->with(['users' => $user->getPaginateByLimit(10)]);
    }
    
    //index
    public function index(Offer $offer)
    {
        return view('shifts/index')->with(['offers' => $offer->getPaginateByLimit(5)]);
        //offersフォルダ：代わってください側をまとめるフォルダ
    }
    
    public function index(Recruitment $recruitment)
    {
        return view('shifts/index')->with(['Recruitments' => $Recruitmentr->getPaginateByLimit(5)]);
        //recruitmentsフォルダ：代われます側をまとめるフォルダ
    }
    
    //show
    public function showOffer(Offer $offer)
    {
        return view('shifts/offers/showOffer')->with(['offer' => $offer]);
    }
    
    public function showOfferUser(OfferUser $offerUser)
    {
        return view('shifts/offers/showOfferUser')->with(['offerUser' => $offerUser]);
    }
    
    public function showRecruitment(Recruitment $recruitment)
    {
        return view('shifts/recruitments/showRecruitment')->with(['recruitment' => $recruitment]);
    }
    
    public function showRecruitmentUser(RecruitmentUser $recruitmentUser)
    {
        return view('shifts/recruitments/showRecruitmentUser')->with(['recruitmentUser' => $recruitmentUser]);
    }
    
    //create
    public function createOffer()
    {
        return view('posts/createOffer');
    }
    
    public function createOfferUser()
    {
        return view('posts/createOfferUser');
    }
    
    public function createRecruitment()
    {
        return view('posts/createRecruitment');
    }
    
    public function createRecruitmentUser()
    {
        return view('posts/createRecruitmentUser');
    }
    
    //store????
    public function storeOffer(Offer $offer, OfferRequest $offerRequest)
    {
        $input = $request['offer'];
        $offer->fill($input)->save();
        return redirect('/offers/' . $offer->id);
    }
    
    public function storeOfferUser(OfferUser $offerUser, OfferUserRequest $offerUserRequest)
    {
        $input = $request['offerUser'];
        $offerUser->fill($input)->save();
        return redirect('/offerusers/' . $offerUser->id);
    }
    
    public function storeRecruitment(Recruitment $recruitment, RecruitmentRequest $recruitmentRequest)
    {
        $input = $request['recruitment'];
        $recruitment->fill($input)->save();
        return redirect('/recruitments/' . $recruitment->id);
    }
    
    public function storeRecruitmentUser(RecruitmentUser $recruitment, RecruitmentUserRequest $recruitmentUserRequest)
    {
        $input = $request['recruitmentUser'];
        $recruitmentUser->fill($input)->save();
        return redirect('/recruitmentusers/' . $recruitmentUser->id);
    }
    
    //edit
    public function editOffer(Offer $offer)
    {
        return view('offers/edit')->with(['offer' => $offer]);
    }
    
    public function editOfferUser(OfferUser $offerUser)
    {
        return view('offerusers/edit')->with(['offerUser' => $offerUser]);
    }
    
    public function editRecruitment(Recruitment $recruitment)
    {
        return view('recruitments/edit')->with(['recruitment' => $recruitment]);
    }
    
    public function editRecruitmentUser(RecruitmentUser $recruitment)
    {
        return view('recruitmentusers/edit')->with(['recruitmentUser' => $recruitmentUser]);
    }
    
    //update
    public function updateOffer(OfferRequest $request, Offer $offer)
    {
        $input_offer = $request['offer'];
        $offer->fill($input_offer)->save();
        return redirect('/offers/' . $offer->id);
    }
    
    public function updateOfferUser(OfferRequestUser $request, OfferUser $offerUser)
    {
        $input_offerUser = $request['offerUser'];
        $offerUser->fill($input_offerUser)->save();
        return redirect('/offerusers/' . $offerUser->id);
    }
    
    public function updateRecruitment(RecruitmentRequest $request, Recruitment $recruitment)
    {
        $input_recruitment = $request['recruitment'];
        $recruitment->fill($input_recruitment)->save();
        return redirect('/recruitments/' . $recruitment->id);
    }
    
    public function updateRecruitmentUser(RecruitmentRequestUser $request, RecruitmentUser $recruitmentUser)
    {
        $input_recruitmentUser = $request['recruitmentUser'];
        $recruitmentUser->fill($input_recruitmentUser)->save();
        return redirect('/recruitments/' . $recruitmentUser->id);
    }
    
    //delete
    public function delete(Offer $offer)
    {
        $offer->delete();
        return redirect('/');
    }
    
    public function delete(OfferUser $offerUser)
    {
        $offerUser->delete();
        return redirect('/');
    }
    
    public function delete(Recruitment $recruitment)
    {
        $recruitment->delete();
        return redirect('/');
    }
    
    public function delete(RecruitmentUser $recruitmentUser)
    {
        $recruitmentUser->delete();
        return redirect('/');
    }
}
