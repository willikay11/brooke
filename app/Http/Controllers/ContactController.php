<?php
/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/10/17
 * Time: 6:06 PM
 */

namespace App\Http\Controllers;


use brooke\Contact\ContactRepository;
use brooke\Contact\ContactRules;
use brooke\Models\Country;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ContactController extends Controller
{

    use ContactRules;

    /**
     * @var ContactRepository
     */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {

        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        $countries = ['' => 'Select One'] + Country::all()->pluck('name', 'id')->toArray();

        return view('frontend.contact.index', [
            'countries' => $countries
        ]);
    }

    public function store(Request $request)
    {
        $validation = $this->validateContact($request);

        if ($validation)
        {
            return back()->withErrors($validation)->withInput();
        }

        $this->contactRepository->save($request->all());

        Flash::success("Client's next interaction date scheduled successfully");

        return back();
    }
}