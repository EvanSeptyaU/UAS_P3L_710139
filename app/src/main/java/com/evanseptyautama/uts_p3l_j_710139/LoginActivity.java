package com.evanseptyautama.uts_p3l_j_710139;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class LoginActivity extends AppCompatActivity implements View.OnClickListener{

    Button btnLoginCustomer,btnLoginPemilikMobil,btnLoginPegawai,btnLoginDriver;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        btnLoginCustomer.setOnClickListener(this);
        btnLoginCustomer=findViewById(R.id.btnLoginCustomer);
        btnLoginDriver.setOnClickListener(this);
        btnLoginDriver=findViewById(R.id.btnLoginDriver);
        btnLoginPegawai.setOnClickListener(this);
        btnLoginPegawai=findViewById(R.id.btnLoginPegawai);
        btnLoginPemilikMobil.setOnClickListener(this);
        btnLoginPemilikMobil=findViewById(R.id.btnLoginPemilikMobil);

    }


    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.btnLoginCustomer:
                Intent intent = new Intent(this, LoginCustomerActivity.class);
                startActivity(intent);
                break;
            case R.id.btnLoginDriver:
                Intent intent1 = new Intent(this,LoginDriverActivity.class);
                startActivity(intent1);
                break;
            case R.id.btnLoginPegawai:
                Intent intent2 = new Intent(this,LoginPegawaiActivity.class);
                startActivity(intent2);
                break;
            case R.id.btnLoginPemilikMobil:
                Intent intent3 = new Intent(this,LoginPemilikMobilActivity.class);
                startActivity(intent3);
                break;
        }
    }
}