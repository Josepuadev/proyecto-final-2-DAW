import { TestBed } from '@angular/core/testing';

import { Ejerciciosservice } from './ejerciciosservice';

describe('Ejerciciosservice', () => {
  let service: Ejerciciosservice;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(Ejerciciosservice);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
