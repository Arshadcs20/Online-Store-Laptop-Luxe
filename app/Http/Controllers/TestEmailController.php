<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class TestEmailController extends Controller
{
    public function sendTestEmail()
    {
        // Fetch or create an Order instance here
        $order = Order::find(1); // Make sure this ID is valid and exists

        // Ensure it's an instance of Order
        if ($order) {
            Mail::to('test@example.com')->send(new OrderConfirmation($order));
            return 'Test email sent!';
        } else {
            return 'Order not found!';
        }
    }
}