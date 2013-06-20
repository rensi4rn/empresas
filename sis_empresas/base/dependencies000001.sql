/********************************************I-DEP-GSS-DIR-0-19/06/2013********************************************/

ALTER TABLE dir.tempresa
  ADD CONSTRAINT fk_tempresa__id_lugar FOREIGN KEY (id_lugar)
    REFERENCES param.tlugar(id_lugar)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE;
    
ALTER TABLE dir.tempresa
  ADD CONSTRAINT fk_tempresa__id_actividad FOREIGN KEY (id_actividad)
    REFERENCES dir.tactividad(id_actividad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE;
    
ALTER TABLE dir.tpublicidad
  ADD CONSTRAINT fk_tpublicidad__id_lugar FOREIGN KEY (id_lugar)
    REFERENCES param.tlugar(id_lugar)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE;
    
ALTER TABLE dir.tactividad_esp
  ADD CONSTRAINT fk_tactividad_esp__id_actividad_prim FOREIGN KEY (id_actividad_prim)
    REFERENCES dir.tactividad_prim(id_actividad_prim)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE;
    
ALTER TABLE dir.tactividad_prim
  ADD CONSTRAINT fk_tactividad_prim__id_actividad_gral FOREIGN KEY (id_actividad_gral)
    REFERENCES dir.tactividad_gral(id_actividad_gral)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE;

ALTER TABLE dir.tactividad
  ADD CONSTRAINT fk_tactividad__id_actividad FOREIGN KEY (id_actividad_fk)
    REFERENCES dir.tactividad(id_actividad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE;
    
/********************************************F-DEP-GSS-DIR-0-19/06/2013********************************************/