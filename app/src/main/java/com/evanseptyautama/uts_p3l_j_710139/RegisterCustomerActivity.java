package com.evanseptyautama.uts_p3l_j_710139;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class RegisterCustomerActivity extends AppCompatActivity implements View.OnClickListener {

    EditText etnamacustomer,etpassword,ettanggallahircustomer,etemailcustomer,
            etnomorteleponcustomer,etalamatcustomer,etnomorktp,etnomorsim,
            etdokumenktp,etdokumensim;
    Button btnRegisterAccountCustomer;
    TextView tvLoginAccountCustomer;
    String namacustomer,password,tanggallahircustomer,emailcustomer,
            nomorteleponcustomer,alamatcustomer,nomorktp,nomorsim,
            dokumenktp,dokumensim;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register_customer);
        etnamacustomer= findViewById(R.id.etnamacustomer);
        etpassword= findViewById(R.id.etpassword);
        ettanggallahircustomer= findViewById(R.id.ettanggallahircustomer);
        etemailcustomer= findViewById(R.id.etemailcustomer);
        etnomorteleponcustomer= findViewById(R.id.etnomorteleponcustomer);
        etalamatcustomer= findViewById(R.id.etalamatcustomer);
        etnomorktp= findViewById(R.id.etnomorktp);
        etnomorsim= findViewById(R.id.etnomorsim);
        etdokumenktp= findViewById(R.id.etdokumenktp);
        etdokumensim= findViewById(R.id.etdokumensim);

        btnRegisterAccountCustomer=findViewById(R.id.btnRegisterAccountCustomer);
        btnRegisterAccountCustomer.setOnClickListener(this);
        tvLoginAccountCustomer.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btnRegisterAccountCustomer:
                namacustomer = etnamacustomer.getText().toString();
                password = etpassword.getText().toString();
                tanggallahircustomer = ettanggallahircustomer.getText().toString();
                emailcustomer = etemailcustomer.getText().toString();
                nomorteleponcustomer = etnomorteleponcustomer.getText().toString();
                alamatcustomer = etalamatcustomer.getText().toString();
                nomorktp = etnomorktp.getText().toString();
                nomorsim = etnomorsim.getText().toString();
                dokumenktp = etdokumenktp.getText().toString();
                dokumensim = etdokumensim.getText().toString();

                register(namacustomer,password,tanggallahircustomer,emailcustomer,
                        nomorteleponcustomer,alamatcustomer,nomorktp,nomorsim,
                        dokumenktp,dokumensim);
                break;
            case R.id.tvLoginCustomer:
                Intent intent = new Intent(this,LoginCustomerActivity.class);
                startActivity(intent);
                finish();
                break;
        }

    }

    private void register(String namacustomer, String password, String tanggallahircustomer, String emailcustomer, String nomorteleponcustomer, String alamatcustomer, String nomorktp, String nomorsim, String dokumenktp, String dokumensim) {
        Intent intent = new Intent(this,LoginCustomerActivity.class);
        startActivity(intent);
    }
}