package com.evanseptyautama.uts_p3l_j_710139;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;

public class Mobil {

    private String namamobil,tipemobil,jenisbahanbakar,jenistransmisi,warnamobil,fasilitasmobil;
    private Integer hargasewa,volumebagasi;

    public Mobil(String namamobil, String tipemobil, String jenisbahanbakar, String jenistransmisi, String warnamobil, String fasilitasmobil, Integer hargasewa, Integer volumebagasi) {
        this.namamobil = namamobil;
        this.tipemobil = tipemobil;
        this.jenisbahanbakar = jenisbahanbakar;
        this.jenistransmisi = jenistransmisi;
        this.warnamobil = warnamobil;
        this.fasilitasmobil = fasilitasmobil;
        this.hargasewa = hargasewa;
        this.volumebagasi = volumebagasi;
    }

    public String getNamamobil() {
        return namamobil;
    }

    public void setNamamobil(String namamobil) {
        this.namamobil = namamobil;
    }

    public String getTipemobil() {
        return tipemobil;
    }

    public void setTipemobil(String tipemobil) {
        this.tipemobil = tipemobil;
    }

    public String getJenisbahanbakar() {
        return jenisbahanbakar;
    }

    public void setJenisbahanbakar(String jenisbahanbakar) {
        this.jenisbahanbakar = jenisbahanbakar;
    }

    public String getJenistransmisi() {
        return jenistransmisi;
    }

    public void setJenistransmisi(String jenistransmisi) {
        this.jenistransmisi = jenistransmisi;
    }

    public String getWarnamobil() {
        return warnamobil;
    }

    public void setWarnamobil(String warnamobil) {
        this.warnamobil = warnamobil;
    }

    public String getFasilitasmobil() {
        return fasilitasmobil;
    }

    public void setFasilitasmobil(String fasilitasmobil) {
        this.fasilitasmobil = fasilitasmobil;
    }

    public Integer getHargasewa() {
        return hargasewa;
    }

    public void setHargasewa(Integer hargasewa) {
        this.hargasewa = hargasewa;
    }

    public Integer getVolumebagasi() {
        return volumebagasi;
    }

    public void setVolumebagasi(Integer volumebagasi) {
        this.volumebagasi = volumebagasi;
    }
}