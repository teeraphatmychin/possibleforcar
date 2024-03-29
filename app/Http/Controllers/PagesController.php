<?php


namespace App\Http\Controllers;
use App\Post;
use App\list_car;
use Mail;

class PagesController extends Controller{

    public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Alex';
		$last = 'Curtis';

		$fullname = $first . " " . $last;
		$email = 'alex@jacurtis.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}
	public function getWishlist($id) {
		$posts = Post::find($id);
		return view('pages.wishlist')->withPosts($posts);
	}
	public function getCart($id) {
		$posts = Post::find($id);
		return view('pages.cart')->withPosts($posts);
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('teeraphatmychin@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}

}