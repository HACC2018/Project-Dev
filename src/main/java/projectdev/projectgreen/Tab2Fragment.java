package projectdev.projectgreen;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.MapView;
import com.google.android.gms.maps.MapsInitializer;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.CameraPosition;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import org.jetbrains.annotations.Nullable;

/**
 * Created by jeraldy on 11/7/18.
 */

public class Tab2Fragment extends Fragment implements OnMapReadyCallback {
    MapView mapView;
    GoogleMap map;

    @Override
    public void onMapReady(GoogleMap googleMap) {
        map = googleMap;

    }

    @Override
    public View onCreateView(LayoutInflater inflater,  ViewGroup container,  Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.frag2,container,false);
        return view;
        // Gets to GoogleMap from the MapView and does initialization stuff
       //map = mapView.getMapAsync(this);
    }



}
