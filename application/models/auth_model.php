<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 13-Sep-17
 * Time: 5:19 PM
 */
class auth_model extends CI_Model{

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function login(){
        /** beide vars  roepen velden aan van login form */
        $username = $_POST['username'];
        /** @var  $password bevat md5 hash aan voor veiligheid van gebruikers */
        $password = md5($_POST['password']);
        /** Query word aangemaakt op te kijken als gebruiker bestaat */
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username'=>$username, 'password'=>$password));
        /**   $this->db->join('roles', 'users.role_id = roles.role_id'); **/
        $query = $this->db->get();
        /** als query bestat doe volgende actie */
        if($query->num_rows() > 0) {
            /** @var  $user  query row wordt hernoemd  */
            $user = $query->row();

            /** als query row is gevuld met username of password voer volgende opdracht uit */
            if ($user->username) {
                $this->session->set_flashdata('gelukt', 'je bent aangemeld');
                /** zorgt dat gegevens in session bewaard worden voor later gebruik */
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;
                $_SESSION['email'] = $user->email;
                $_SESSION['geslacht'] = $user->geslacht;

                /** nadat alles succes vol is gegaan stuur door naar studentplaza/inside */
                redirect('welcome', 'refresh');
            }
        }
        /** als query leeg is, refresh pagina en weergeef sessions error op login form*/
        else{
            $this->session->set_flashdata("ERROR", "Gebruikersnaam of wachtwoord is onjuist!");
            redirect("auth/login", "refresh");

        }
    }
    public function register()
    {
        /** data array word gebruikt op de query klein te houden (array word gevuld met gegevens van register form */
        $data = array(
            'username' => $_POST['username'],
            'password' =>md5($_POST['password']),
            'email' => $_POST['email'],
            'geslacht' => $_POST['geslacht'],


        );
        $this->db->insert('users', $data);


        /** als account is aangemaakt geef sessions melding dat het gelukt is op register pagina */
        $this->session->set_flashdata("gelukt", "Uw account is aangemaakt.");
        redirect("auth/register", "refresh");


    }
}