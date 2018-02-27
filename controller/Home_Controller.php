<?php


require_once 'Secure_Controller.php';

class Home_Controller extends Secure_Controller
    
{
    
    private $res;
    
    
    public function __construct() {}
    
    
    public function __invoke() {}
    
    
    public function uploadPDF(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
                
        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
            
            return $response->withRedirect('/dashboard');
            
        }
        
        $response = $this->view->render($response, 'login.phtml');

        return $response;
                
    }
    
    
    public function logout(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
                
        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
            
            unset($_SESSION['admin']);
            
            session_destroy();
            
            return $response->withRedirect('/login');
            
        }
        
        return $response->withRedirect('/login');
                
    }
    
    
    public function signin(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        if ($request->isPost()) {
                
            $parsedBody = $request->getParsedBody();
            
            // Encrypting Username && Encrypting Password
            
            $admin = (new Home_Model())->signin(Secure::encrypt($parsedBody['username']), Secure::encrypt($parsedBody['password']));
            
            if ($admin && !empty($admin) && is_array($admin)) {
                
                $_SESSION['admin'] = $admin;
                
            }
            
            return $response->withRedirect('/dashboard');
            
        }
                
    }
    
    
        
    public function dashboard(Request $request, Response $response) 
    {
        //$this->logger->addInfo('Ticket list');
        
        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
            
            $users = ['buyer', 'mechanic'];
            
            foreach ($users as $user) {
                
                $items[$user.'s'] = (new Home_Model())->usersCount($user);
                
            }
            
            $items['users'] = [
                'totalUsers'   =>  $items['buyers']['buyerUsers']  + $items['mechanics']['mechanicUsers'],  
                'totalAndDev'  =>  $items['buyers']['buyerAndDev'] + $items['mechanics']['mechanicAndDev'],
                'totaliOsDev'  =>  $items['buyers']['buyeriOsDev'] + $items['mechanics']['mechaniciOsDev']
            ];
            
            $response = $this->view->render($response, 'dashboard.phtml', ['items' => $items]);

            return $response;    
            
        } else {
            
            return $response->withRedirect('/login');
                        
        }        
        
    }
    
        
    public function adminProfile(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        $response = $this->view->render($response, 'admin_profile.phtml', ['admin' => $_SESSION['admin']]);

        return $response;
        
    }
    
    
    public function buyerProfile(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        $list = (new Home_Model())->buyerProfile();

        $response = $this->view->render($response, 'buyer_profile.phtml', ['buyers' => $list]);

        return $response;
        
    }

    
    public function buyerCalendar(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        $list = (new Home_Model())->buyerCalendar();

        $response = $this->view->render($response, 'buyer_calendar.phtml', ['buyerAppointments' => $list]);

        return $response;
        
    }
    
    
    public function mechanicProfile(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        $list = (new Home_Model())->mechanicProfile();

        $response = $this->view->render($response, 'mechanic_profile.phtml', ['mechanics' => $list]);

        return $response;
        
    }
    
    
    public function mechanicCalendar(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        $list = (new Home_Model())->mechanicCalendar();

        $response = $this->view->render($response, 'mechanic_calendar.phtml', ['mechanicAppointments' => $list]);

        return $response;
        
    }
    
    
    
    public function approveMechanic(Request $request, Response $response, $args) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        if (!empty($args) && is_array($args) && isset($args['id'])) {
            
            if ((new Home_Model())->approveMechanic($args['id'])) {
                
                $_SESSION['ack']['success'] = 'Mechanic has been Approved by the Carmec';
                
            }
            
        } 
        
        return $response->withRedirect('/approve_deny_mechanics');
        
    }
    
    
    public function denyMechanic(Request $request, Response $response, $args) 
    {
        
        //$this->logger->addInfo('Ticket list');
        
        if (!empty($args) && is_array($args) && isset($args['id'])) {
            
            if ((new Home_Model())->denyMechanic($args['id'])) {
                
                $_SESSION['ack']['failed'] = 'Mechanic has been deleted by the Carmec';
                
            }
            
        }
        
        return $response->withRedirect('/approve_deny_mechanics');
        
    }
     
        
    public function unapprovedMechanics(Request $request, Response $response)
    {
            
        $mechanics = (new Home_Model())->unapprovedMechanics();
            
        $response = $this->view->render($response, 'approve_deny_mechanics.phtml', ['mechanics' => $mechanics]);

        return $response;            
        
    }
        

    public function vehicleDetails(Request $request, Response $response) 
    {
        
        //$this->logger->addInfo('Ticket list');

        $appointments = (new Home_Model())->vehicleDetails();

        $response = $this->view->render($response, 'vehicle_details.phtml', ['appointments' => $appointments]);

        return $response;
        
    }
    
    
}
