<div class="erp-hr-leave-request-new">

    <div class="row">
        <?php erp_html_form_input( array(
            'label'    => __( 'Leave Type', 'wp-erp' ),
            'name'     => 'leave_policy',
            'id'       => 'erp-hr-leave-req-leave-policy',
            'value'    => '',
            'required' => true,
            'type'     => 'select',
            'options'  => array( '' => __( '- Select -', 'wp-erp' ) ) + erp_hr_leave_get_policies_dropdown_raw()
        ) ); ?>
    </div>

    <div class="row">
        <?php erp_html_form_input( array(
            'label'    => __( 'From', 'wp-erp' ),
            'name'     => 'leave_from',
            'id'       => 'erp-hr-leave-req-from-date',
            'value'    => '',
            'required' => true,
            'class'    => 'erp-leave-date-field',
        ) ); ?>
    </div>

    <div class="row">
        <?php erp_html_form_input( array(
            'label'    => __( 'To', 'wp-erp' ),
            'name'     => 'leave_to',
            'id'       => 'erp-hr-leave-req-to-date',
            'value'    => '',
            'required' => true,
            'class'    => 'erp-leave-date-field',
        ) ); ?>
    </div>

    <div class="erp-hr-leave-req-show-days show-days" style="margin:20px 0px;"></div>

    <div class="row">
        <?php erp_html_form_input( array(
            'label'       => __( 'Reason', 'wp-erp' ),
            'name'        => 'leave_reason',
            'type'        => 'textarea',
            'custom_attr' => array( 'cols' => 30, 'rows' => 3 )
        ) ); ?>
    </div>

    <input type="hidden" name="employee_id" id="erp-hr-leave-req-employee-id" value="<?php echo get_current_user_id(); ?>">
    <input type="hidden" name="action" value="erp-hr-leave-req-new">
    <?php wp_nonce_field( 'erp-leave-req-new' ); ?>
</div>