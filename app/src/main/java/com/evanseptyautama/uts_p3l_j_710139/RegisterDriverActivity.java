package com.evanseptyautama.uts_p3l_j_710139;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class RegisterDriverActivity extends AppCompatActivity implements View.OnClickListener{
    EditText etnamadriver,etpassword,etalamatdriver,ettanggallahirdriver,
            etjeniskelamindriver,etemaildriver,etnomortelepondriver,
            etnomorsimdriver,etfotodriver,etstatusdriver,etbahasadriver,
            etsuratbebasnapza,etsuratkesehatanjiwa,etsuratkesehatanjasmani,
            etskck,ettarifdriver,etrerataratingdriver;
    Button btnRegisterDriver;
    String namadriver,password;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register_driver);

        etnamadriver = findViewById(R.id.etnamadriver);
        etpassword = findViewById(R.id.etpassword);
        etalamatdriver = findViewById(R.id.etalamatdriver);
        ettanggallahirdriver = findViewById(R.id.ettanggallahirdriver);
        etjeniskelamindriver = findViewById(R.id.etjeniskelamindriver);
        etemaildriver = findViewById(R.id.etemaildriver);
        etnomortelepondriver = findViewById(R.id.etnomortelepondriver);
        etnomorsimdriver = findViewById(R.id.etnomorsimdriver);
        etfotodriver = findViewById(R.id.etfotodriver);
        etstatusdriver = findViewById(R.id.etstatusdriver);
        etbahasadriver = findViewById(R.id.etbahasadriver);
        etsuratbebasnapza = findViewById(R.id.etsuratbebasnapza);
        etsuratkesehatanjiwa = findViewById(R.id.etsuratkesehatanjiwa);
        etsuratkesehatanjasmani = findViewById(R.id.etsuratkesehatanjasmani);
        etskck = findViewById(R.id.etskck);
        ettarifdriver = findViewById(R.id.ettarifdriver);
        etrerataratingdriver = findViewById(R.id.etrerataratingdriver);
        btnRegisterDriver = findViewById(R.id.btnRegisterDriver);

        btnRegisterDriver.setOnClickListener(this);



    }

    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.btnRegisterDriver:
                namadriver = etnamadriver.getText().toString();
                password = etpassword.getText().toString();
                register();
                break;
        }
    }

    private void register() {
        Intent intent = new Intent(this,LoginActivity.class);
        startActivity(intent);
    }



}