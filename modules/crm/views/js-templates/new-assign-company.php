<div class="crm-customer-assing-company-wrap">

    <div class="row">
        <?php erp_html_form_input( array(
            'label'       => __( 'Company Name', 'wp-erp' ),
            'name'        => 'erp_assign_company_id',
            'type'        => 'select',
            'id'          => 'erp-select-customer-company',
            'class'       => 'erp-crm-select2-add-more erp-crm-customer-company-dropdown',
            'custom_attr' => ['data-id' => 'erp-contact-new', 'data-type' => 'company', 'data-single' => 1 ],
            'required'    => true,
            'options'     => [ '' => __( '--Select a Company--', 'wp-erp' ) ] + erp_get_peoples_array( [ 'type' => 'company', 'number' => -1 ] )
        ) ); ?>
    </div>

    <?php wp_nonce_field( 'wp-erp-crm-assign-customer-company-nonce' ); ?>

    <input type="hidden" name="action" value="erp-crm-customer-add-company">
    <input type="hidden" name="customer_id" value="{{ data }}">
</div>