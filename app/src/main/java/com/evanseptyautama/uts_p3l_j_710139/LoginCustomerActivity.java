package com.evanseptyautama.uts_p3l_j_710139;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class LoginCustomerActivity extends AppCompatActivity implements View.OnClickListener {

    EditText etnamacustomer,etpassword;
    Button btnloginCustomer;
    String namacustomer,password;
    TextView tvCreateAccountCustomer;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_customer);

        etnamacustomer=findViewById(R.id.etnamacustomer);
        etpassword=findViewById(R.id.etpassword);

        btnloginCustomer=findViewById(R.id.btnLoginCustomer);
        btnloginCustomer.setOnClickListener(this);

        tvCreateAccountCustomer = findViewById(R.id.tvCreateAccountCustomer);
        tvCreateAccountCustomer.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btnLoginCustomer:
            namacustomer = etnamacustomer.getText().toString();
            password = etpassword.getText().toString();
                login(namacustomer,password);
                break;
            case R.id.tvCreateAccountCustomer:
                Intent intent = new Intent(this,RegisterCustomerActivity.class);
                startActivity(intent);
                break;
        }
    }

    private void login(String namacustomer, String password) {
        Intent intent = new Intent(this,MainActivity.class);
        startActivity(intent);
    }
}