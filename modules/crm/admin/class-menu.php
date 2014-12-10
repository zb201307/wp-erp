<?php
namespace WeDevs\ERP\CRM;

/**
 * Admin Menu
 */
class Admin_Menu {

    /**
     * Kick-in the class
     *
     * @return void
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Add menu items
     *
     * @return void
     */
    public function admin_menu() {

        add_menu_page( __( 'Sales', 'wp-erp' ), __( 'Sales', 'wp-erp' ), 'manage_options', 'erp-sales', array( $this, 'dashboard_page' ), null, null );

        add_submenu_page( 'erp-sales', __( 'Overview', 'wp-erp' ), __( 'Overview', 'wp-erp' ), 'manage_options', 'erp-sales', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-sales', __( 'Customers', 'wp-erp' ), __( 'Customers', 'wp-erp' ), 'manage_options', 'erp-sales-customers', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-sales', __( 'Leads', 'wp-erp' ), __( 'Leads', 'wp-erp' ), 'manage_options', 'erp-sales-leads', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-sales', __( 'Oppurtunity', 'wp-erp' ), __( 'Oppurtunity', 'wp-erp' ), 'manage_options', 'erp-sales-oppurtunity', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-sales', __( 'Customer Category', 'wp-erp' ), __( 'Customer Category', 'wp-erp' ), 'manage_options', 'erp-sales-category', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-sales', __( 'Newsletter', 'wp-erp' ), __( 'Newsletter', 'wp-erp' ), 'manage_options', 'erp-sales-newsletter', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-sales', __( 'Sales Team', 'wp-erp' ), __( 'Sales Team', 'wp-erp' ), 'manage_options', 'erp-sales-team', array( $this, 'dashboard_page' ) );

        /** Phone Calls and SMS */
        add_menu_page( __( 'Calls & SMS', 'wp-erp' ), __( 'Calls & SMS', 'wp-erp' ), 'manage_options', 'erp-calls', array( $this, 'dashboard_page' ), null, null );

        add_submenu_page( 'erp-calls', __( 'Overview', 'wp-erp' ), __( 'Overview', 'wp-erp' ), 'manage_options', 'erp-calls', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-calls', __( 'Logged Calls', 'wp-erp' ), __( 'Logged Calls', 'wp-erp' ), 'manage_options', 'erp-calls-logged', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-calls', __( 'Scheduled Calls', 'wp-erp' ), __( 'Scheduled Calls', 'wp-erp' ), 'manage_options', 'erp-calls-schedule', array( $this, 'dashboard_page' ) );
        add_submenu_page( 'erp-calls', __( 'SMS', 'wp-erp' ), __( 'SMS', 'wp-erp' ), 'manage_options', 'erp-calls-sms', array( $this, 'dashboard_page' ) );
    }

    /**
     * Handles the dashboard page
     *
     * @return void
     */
    public function dashboard_page() {
        echo "Dashboard!";
    }
}

new Admin_Menu();